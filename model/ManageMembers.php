<?php

class ManageMembers extends DbConnect
{


    function manageInscription(Member $data)
    {
        $pdo = $this->Connect();
        $request = "INSERT INTO members (login, pass, email) VALUES ( :login, :pass, :email)";
        $insert = $pdo->prepare($request);
        $insert->execute([
            'login' => htmlspecialchars($data->getLogin()),
            'pass' => password_hash($data->getPass(), PASSWORD_DEFAULT),
            'email' => htmlspecialchars($data->getEmail())

        ]);
    }
    function manageView()
    {
        $pdo = $this->Connect();
        $request = "SELECT * FROM members";
        $view = $pdo->prepare($request);
        $view->execute();
        return $view;
    }

    function manageDelete($id)
    {
        $pdo = $this->Connect();
        $request = "DELETE FROM members WHERE id=$id";
        $delete = $pdo->prepare($request);
        $delete->execute();
    }

    function manageUpdate(Member $member)
    {
        $pdo = $this->Connect();
        $id = $member->getId();
        $request = "UPDATE members SET login = :login, email = :email, status = :status WHERE id=$id";
        $update = $pdo->prepare($request);
        $update->execute([
            'login' => $member->getLogin(),
            // 'pass' => password_hash($member->getPass(), PASSWORD_DEFAULT),
            'email' => $member->getEmail(),
            'status' => $member->getStatus()
        ]);
    }

    function manageConnect(array $data)
    {
        $pdo = $this->Connect();
        $request = "SELECT * FROM members WHERE login = :login";
        $connect = $pdo->prepare($request);
        $connect->execute(['login' => $data['login']]);
        return $connect;
    }
}
