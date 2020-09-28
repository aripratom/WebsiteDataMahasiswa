<?php
   require __DIR__ . '/vendor/autoload.php';

   use Kreait\Firebase\Factory;
   use Kreait\Firebase\ServiceAccount;

   $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/uas-iot-aria-pratomo-firebase-adminsdk-wmqzq-a8f4c88f33.json');
   $firebase = (new Factory)
      ->withServiceAccount($serviceAccount)
      ->withDatabaseUri('https://uas-iot-aria-pratomo.firebaseio.com')
      ->create();

   $database = $firebase->getDatabase();
