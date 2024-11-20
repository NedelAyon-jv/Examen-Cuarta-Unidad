<?php

session_start();
include_once __DIR__ . '/../config.php';

if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = 123;
}

if (isset($_POST['action'])) {

    switch ($_POST['action']) {

        case 'add_cliente':
            $name_cliente = $_POST['name'];
            $email_cliente = $_POST['email'];
            $password_cliente = $_POST['password'];
            $phone_number_cliente = $_POST['phone_number'];
            $is_suscribed_cliente = $_POST['is_suscribed'];
            $level_id_cliente = $_POST['level_id'];
            $clientController = new clientController();
            $clientController->addCliente($name_cliente, $email_cliente, $password_cliente, $phone_number_cliente, $is_suscribed_cliente, $level_id_cliente);
            break;

        case 'update_cliente':
            $name_cliente = $_POST['name'];
            $email_cliente = $_POST['email'];
            $password_cliente = $_POST['password'];
            $phone_number_cliente = $_POST['phone_number'];
            $is_suscribed_cliente = $_POST['is_suscribed'];
            $level_id_cliente = $_POST['level_id'];
            $id_cliente = $_POST['id'];
            $clientController = new clientController();
            $clientController->updateCliente($name_cliente, $email_cliente, $password_cliente, $phone_number_cliente, $is_suscribed_cliente, $level_id_cliente, $id_cliente);
            break;

        case 'delete_cliente':
            $id_cliente = $_POST['id'];
            $clientController = new clientController();
            $clientController->deleteCliente($id_cliente);
            break;
    }
}


class clientController
{

    public function addCliente($name_cliente, $email_cliente, $password_cliente, $phone_number_cliente, $is_suscribed_cliente, $level_id_cliente)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name_cliente,
                'email' => $email_cliente,
                'password' => $password_cliente,
                'phone_number' => $phone_number_cliente,
                'is_suscribed' => $is_suscribed_cliente,
                'level_id' => $level_id_cliente
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

    public  function updateCliente($name_cliente, $email_cliente, $password_cliente, $phone_number_cliente, $is_suscribed_cliente, $level_id_cliente, $id_cliente)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS =>
            'name=' . $name_cliente .
                '&email=' . $email_cliente .
                '&password=' . $password_cliente .
                '&phone_number=' . $phone_number_cliente .
                '&is_suscribed=' . $is_suscribed_cliente .
                '&level_id=' . $level_id_cliente .
                '&id=' . $id_cliente,
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

    public function deleteCliente($id_cliente)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/' . $id_cliente,
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

    public function getClientes()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
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

    public function getCliente($id_cliente)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/'. $id_cliente,
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

    public function getSuscripciones()
    {
        return [
            ['id' => 0, 'name' => 'Sin suscripción'],
            ['id' => 1, 'name' => 'Mensual'],
            ['id' => 2, 'name' => 'Anual']
        ];
    }
}
