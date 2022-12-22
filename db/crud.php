<?php
    class crud{
        //private database objects
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;  
        }

        //function to insert new records in attendee database
        public function insertpatient($firstname, $lastname, $dateofbirth, $emailaddress, $contactnumber, $disability, $Password){
            try {
                $sql= "INSERT INTO patient (firstname, lastname, dateofbirth, emailaddress, contactnumber, disability_id, Password) 
                VALUES (:fname,:lname,:dob,:email,:contact,:disability, :Pass)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$firstname);
                $stmt->bindparam(':lname',$lastname);
                $stmt->bindparam(':dob',$dateofbirth);
                $stmt->bindparam(':email',$emailaddress);
                $stmt->bindparam(':contact',$contactnumber);
                $stmt->bindparam(':disability',$disability);
                $stmt->bindparam(':Pass',$Password);

                $stmt->execute ();
                return true;
                
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editpatient($patientid, $firstname, $lastname, $dateofbirth, $emailaddress, $contactnumber, $disability){
            try{
                $sql = "UPDATE `patient` SET `firstname`=:fname,`lastname`=:lname, `dateofbirth`=:dob,`emailaddress`=:email,`contactnumber`=:contact,`disability_id`=:disability 
                WHERE patient_id = :id ";

                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$patientid);
                $stmt->bindparam(':fname',$firstname);
                $stmt->bindparam(':lname',$lastname);
                $stmt->bindparam(':dob',$dateofbirth);
                $stmt->bindparam(':email',$emailaddress);
                $stmt->bindparam(':contact',$contactnumber);
                $stmt->bindparam(':disability',$disability);

                $stmt->execute ();
                return true;

            }catch(PDOException $e) {
                echo $e->getMessage();
                return false;
                
            }

        }

        public function getpatient(){
            try{
            $sql = "SELECT * FROM `patient`a inner join disabilities s on a.disability_id = s.disability_id";
            $result = $this ->db->query($sql);
            return $result;

            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getpatientDetails($id){
            try{
            $sql =" Select * from patient a inner join disability s on a.disability_id = s.disability_id
            where patient_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam (':id', $id);
            $stmt->execute();
            $result =$stmt->fetch();
            return $result;

            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getpatientlogin($emailaddress,$password){
            try{
            $sql =" Select * from patient a inner join disability s on a.disability_id = s.disability_id
            where 'emailaddress'= emailaddress AND 'password' = password";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam (':emailaddress', $emailaddress);
            $stmt->bindparam (':password', $password);
            $stmt->execute();
            $result =$stmt->fetch();
            return $result;

            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
            
        }

        public function deletepatient($id){
            try{
            $sql = "delete from patient where patient_id = :id"; 
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam (':patient_id', $id);
            $stmt->execute();
            return true;
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }

        }

        public function getdisabilities(){
            try{

                $sql = "SELECT * FROM `disabilities`";
                $result = $this->db->query($sql);
                return $result;
                
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getdisabilityById ($id){
            try{

                $sql = "SELECT * FROM `disabilities` where disability_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam (':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
                
            }catch (PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

       
    }

?>