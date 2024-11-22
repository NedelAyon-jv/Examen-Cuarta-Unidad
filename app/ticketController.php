<?php

session_start();
include_once __DIR__ . '/../config.php';

if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = 123;
}

if (isset($_POST['action'])) {

    switch ($_POST['action']) {

        case 'add_ticket':
            $name_ticket = $_POST['name'];
            $code_ticket = $_POST['code'];
            $percentage_ticket = $_POST['percentage'];
            $min_amount_required = $_POST['min_amount'];
            $min_product_required = $_POST['max_product'];
            $start_date_ticket = $_POST['start_date'];
            $end_date_ticket = $_POST['end_date'];
            $max_uses_ticket = $_POST['max_uses'];
            $count_uses_ticket = $_POST['count_uses'];
            $validity_ticket = $_POST['validity'];
            $status_ticket = $_POST['status'];
            $ticketController = new ticketController();
            $ticketController->addTicket($name_ticket, $code_ticket, $percentage_ticket, $min_amount_required, $min_product_required, $start_date_ticket, $end_date_ticket, $max_uses_ticket, $count_uses_ticket, $validity_ticket, $status_ticket);

            break;

        case 'update_ticket':
            $name_ticket = $_POST['name'];
            $code_ticket = $_POST['code'];
            $percentage_ticket = $_POST['percentage'];
            $min_amount_required = $_POST['min_amount'];
            $min_product_required = $_POST['max_product'];
            $start_date_ticket = $_POST['start_date'];
            $end_date_ticket = $_POST['end_date'];
            $max_uses_ticket = $_POST['max_uses'];
            $count_uses_ticket = $_POST['count_uses'];
            $validity_ticket = $_POST['validity'];
            $status_ticket = $_POST['status'];
            $id_ticket = $_POST['id'];
            $ticketController = new ticketController();
            $ticketController->updateTicket($name_ticket, $code_ticket, $percentage_ticket, $min_amount_required, $min_product_required, $start_date_ticket, $end_date_ticket, $max_uses_ticket, $count_uses_ticket, $validity_ticket, $status_ticket, $id_ticket);
            break;

        case 'delete_ticket':
            $id_ticket = $_POST['id'];
            $ticketController = new ticketController();
            $ticketController->deleteTicket($id_ticket);
            break;
    }
}


class ticketController
{

    public function addTicket($name_ticket, $code_ticket, $percentage_ticket, $min_amount_required, $min_product_required, $start_date_ticket, $end_date_ticket, $max_uses_ticket, $count_uses_ticket, $validity_ticket, $status_ticket)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name_ticket,
                'code' => $code_ticket,
                'percentage_discount' => $percentage_ticket,
                'min_amount_required' => $min_amount_required,
                'min_product_required' =>  $min_product_required,
                'start_date' => $start_date_ticket,
                'end_date' => $end_date_ticket,
                'max_uses' => $max_uses_ticket,
                'count_uses' => $count_uses_ticket,
                'valid_only_first_purchase' => $validity_ticket,
                'status' => $status_ticket
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code > 0) {

            header("Location:" . BASE_PATH . "home?status=ok");
        } else {

            header("Location:" . BASE_PATH . "home?status=error");
        }
    }

    public function updateTicket($name_ticket, $code_ticket, $percentage_ticket, $min_amount_required, $min_product_required, $start_date_ticket, $end_date_ticket, $max_uses_ticket, $count_uses_ticket, $validity_ticket, $status_ticket, $id_ticket)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS =>
            'name=' . $name_ticket .
                '&code=' . $code_ticket .
                '&percentage_discount=' . $percentage_ticket .
                '&min_amount_required=' . $min_amount_required .
                '&min_product_required=' . $min_product_required .
                '&start_date=' . $start_date_ticket .
                '&end_date=' . $end_date_ticket .
                '&max_uses=' . $max_uses_ticket .
                '&count_uses=' . $count_uses_ticket .
                '&valid_only_first_purchase=' . $validity_ticket .
                '&status=' . $status_ticket .
                '&id=' . $id_ticket,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code > 0) {

            header("Location:" . BASE_PATH . "home?status=ok");
        } else {

            header("Location:" . BASE_PATH . "home?status=error");
        }
    }

    public function deleteTicket($id_ticket)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons/' . $id_ticket,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code > 0) {

            header("Location:" . BASE_PATH . "home?status=ok");
        } else {

            header("Location:" . BASE_PATH . "home?status=error");
        }
    }

    public function getTicket($id_ticket)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons/' . $id_ticket,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code > 0) {

            return $response->data;
        } else {

            return [];
        }
    }

    public function getTickets()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) && $response->code > 0) {

            return $response->data;
        } else {

            return [];
        }
    }

}
