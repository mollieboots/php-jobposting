<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobOpening.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'>
                <title>Job Posting</title>
            </head>
            <body>
                <h1>Submit Job Posting</h1>
                    <form class='' action='/jobpostings' method='get'>
                        <label for='title'>Job Post Title</label>
                        <input type='text' name='title' id='title'>

                        <label for='desc'>Job Description</label>
                        <input type='text' name='desc' id='desc'>

                        <label for='name'>Your Name</label>
                        <input type='text' name='name' id='name'>

                        <label for='email'>Your Email</label>
                        <input type='email' name='email' id='email'>

                        <label for='phone'>Your Phone</label>
                        <input type='number' name='phone' id='phone'>

                        <button type='submit'>Post Job</button>
                    </form>
            </body>
        </html>";
    });

    $app->get("/jobpostings", function() {
        $job = new JobOpening($_GET['title'],$_GET['desc']);
        $job->setContact($contact = new Contact($_GET['name'],$_GET['email'],$_GET['phone']));
        $jobTitle = $job->getTitle();
        $jobDesc = $job->getDesc();
        $contactName = $contact->getName();
        $contactEmail = $contact->getEmail();
        $contactPhone = $contact->getPhone();
        return "
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'>
                <title>Job Posting</title>
            </head>
            <body>
                <div>
                    <ul>
                        <li>$jobTitle</li>
                        <li>$jobDesc</li>
                        <li>$contactName</li>
                        <li>$contactEmail</li>
                        <li>$contactPhone</li>
                    </ul>
                </div>
            </body>
        </html>";
    });

    return $app;
?>
