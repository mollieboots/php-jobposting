<?php
    class JobOpening
    {
        private $title;
        private $desc;
        private $contact;

        function __construct($title, $desc)
        {
            $this->title = $title;
            $this->desc = $desc;
            $this->contact = "";
        }

        function setTitle($job_title)
        {
            $this->title = $job_title;
        }

        function getTitle()
        {
            return $this->title;
        }

        function setDesc($job_desc)
        {
            $this->desc = $job_desc;
        }

        function getDesc()
        {
            return $this->desc;
        }

        function setContact($job_contact)
        {
            $this->contact = $job_contact;
        }

        function getContact()
        {
            return $this->contact;
        }
    }

    class Contact {

        private $name;
        private $email;
        private $phone;

        function __construct($name, $email, $phone)
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        function setName($contact_name)
        {
            $this->name = $contact_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setEmail($contact_email)
        {
            $this->email = $contact_email;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setPhone($contact_phone)
        {
            $this->phone = $contact_phone;
        }

        function getPhone()
        {
            return $this->phone;
        }
    }
?>
