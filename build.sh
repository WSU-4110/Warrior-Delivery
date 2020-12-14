#!/bin/sh
cd $TRAVIS_BUILD_DIR/
sbt ++$TRAVIS_SCALA_VERSION Warrior-Delivery

script:

    phpunit PHPUnitTest/tests/CancelOrderKTest.php

  - php PHPUnitTest/tests/countValuesTest.php
    php PHPUnitTest/tests/CreateDelivererAccountTest.php
    phpunit PHPUnitTest/tests/CreateStudentAccountTest.php
  - php PHPUnitTest/tests/DelivererEmailTest.php
  - php PHPUnitTest/tests/delivererHasOrderTest.php
  - php PHPUnitTest/tests/deliverertest.php
  - php PHPUnitTest/tests/EditMenuTest.php
  - php PHPUnitTest/tests/EmailTest.php
  - php PHPUnitTest/tests/ExampleTest.php
  - php PHPUnitTest/tests/LoginTest.php
  - php PHPUnitTest/tests/MockTest.php
  - php PHPUnitTest/tests/orderingPriceTest.php
  - php PHPUnitTest/tests/orderingTest.php
  - php PHPUnitTest/tests/PasswordTest.php
  - php PHPUnitTest/tests/StudentEmailTest.php
  - php PHPUnitTest/tests/UserTest.php