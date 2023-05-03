<?php

namespace App;

use PDO;

class User
{
	protected $id;
	protected $first_name;
	protected $middle_name;
	protected $last_name;
	protected $email;
	protected $pass;
	protected $confirm_password;
	protected $birthdate;
	protected $gender;
	protected $address;
	protected $contact_number;
	protected $created_at;

	public function getId()
	{
		return $this->id;
	}

	public function getFullName()
	{
		return $this->first_name . " " . $this->middle_name . " " . $this->last_name;
	}
	
	public function getFirstName()
	{
		return $this->first_name;
	}
	public function getMiddleName()
	{
		return $this->middle_name;
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function getBirthdate()
	{
		return $this->birthdate;
	}
	public function getGender()
	{
		return $this->gender;
	}
	public function getAddress()
	{
		return $this->address;
	}
	public function getContactNumber()
	{
		return $this->contact_number;
	}

	public static function getById($id)
	{
		global $conn;

		try {
			$sql = "
				SELECT * FROM users
				WHERE id=:id
				LIMIT 1
			";
			$statement = $conn->prepare($sql);
			$statement->execute([
				'id' => $id
			]);
			$result = $statement->fetchObject('App\User');
			return $result;
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return null;
	}

	public static function hashPassword($password)
	{
		$hashed_password = null;
		// DO SOMETHING HERE TO HASH THE PASSWORD
		// ...
		return $hashed_password;
	}

	public static function attemptLogin($email, $pass)
	{
		global $conn;

		try {
			$sql = "
				SELECT * FROM users
				WHERE email=:email
					AND pass=:pass
				LIMIT 1
			";
			$statement = $conn->prepare($sql);

			// Perform password hash verification (if necessary)

			$statement->execute([
				'email' => $email,
				'pass' => $pass
			]);
			$result = $statement->fetchObject('App\User');
			return $result;
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return null;
	}

	public static function register($first_name, $middle_name, $last_name, $email, $password, $confirm_password, $birthdate, $gender, $address, $contact_number)
	{
		global $conn;

		try {
			// Hash the password before inserting it to DB
			// ..

			$sql = "
				INSERT INTO users (first_name, middle_name, last_name, email, pass, confirm_password, birthdate, gender, address, contact_number)
				VALUES ('$first_name','$middle_name', '$last_name', '$email', '$password', '$confirm_password','$birthdate','$gender','$address','$contact_number')
			";
			$conn->exec($sql);
			// echo "<li>Executed SQL query " . $sql;
			return $conn->lastInsertId();
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return false;
	}

	public static function registerMany($users)
	{
		global $conn;

		try {
			foreach ($users as $user) {
				// Hash the password before inserting it to DB
				// ..

				$sql = "
					INSERT INTO users
					SET
						first_name=\"{$user['first_name']}\",
						middle_name=\"{$user['middle_name']}\",
						last_name=\"{$user['last_name']}\",
						email=\"{$user['email']}\",
						pass=\"{$user['pass']}\",
						confirm_password=\"{$user['confirm_password']}\",
						birthdate=\"{$user['birthdate']}\",
						gender=\"{$user['gender']}\",
						address=\"{$user['address']}\",
						contact_number=\"{$user['contact_number']}\",

				";
				$conn->exec($sql);
				// echo "<li>Executed SQL query " . $sql;
			}
			return true;
		} catch (PDOException $e) {
			error_log($e->getMessage());
		}

		return false;
	}
}
