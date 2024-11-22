<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once __DIR__ . '/../config.php';

if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = 123;
}

if (isset($_POST['action'])) {

    switch ($_POST['action']) {

        case 'add_order':
            $folio = $_POST['folio'];
            $total = $_POST['total'];
            $is_paid = $_POST['is_paid'];
            $client_id = $_POST['client_id'];
            $address_id = $_POST['address_id'];
            $order_status_id = $_POST['order_status_id'];
            $payment_type_id = $_POST['payment_type_id'];
            $coupon_id = $_POST['coupon_id'];

            $ordersController = new ordersController();
            $ordersController->addOrder($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id);
            break;

        case 'update_order':

            $order_status_id = $_POST['order_status_id'];
            $id = $_POST['id'];

            $ordersController = new ordersController();
            $ordersController->updateOrder($order_status_id, $id);
            break;

        case 'delete_order':
            $id = $_POST['id'];
            $ordersController = new ordersController();
            $ordersController->deleteOrder($id);
            break;
    }
}


class ordersController
{


    public function addOrder($folio, $total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'folio' => $folio,
                'total' => $total,
                'is_paid' => $is_paid,
                'client_id' => $client_id,
                'address_id' => $address_id,
                'order_status_id' => $order_status_id,
                'payment_type_id' => $payment_type_id,
                'coupon_id' => $coupon_id,
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

    public function updateOrder($order_status_id, $id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS =>
            'id=' . $id .
                '&order_status_id=' . $order_status_id,
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

    public function deleteOrder($id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/' . $id,
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

    public function getOrders()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
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

    public function getOrder($id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/details/' . $id,
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
