<?php

class Contact
{
    private $conn;
    private $table = "contacts"; // Remplacez par votre table de contacts

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function saveMessage($name, $email, $phone, $company, $subject, $message)
    {
        $query = "INSERT INTO " . $this->table . " (name, email, phone, company, subject, message) VALUES (:name, :email, :phone, :company, :subject, :message)";

        $stmt = $this->conn->prepare($query);

        // Liaison des paramètres
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':company', $company);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        if ($stmt->execute()) {
            return true; // Succès
        }

        return false; // Échec
    }
}
