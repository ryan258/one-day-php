<?php
  session_start();

  $_SESSION['myFavFood'] = 'Pizza';
  $_SESSION['myFavDrink'] = 'Cola';
  $_SESSION['myFavColor'] = 'Orange';

  # Updating a session variable
  $_SESSION['myFavDrink'] = 'Beer';

  # Deleting a session variable
  unset($_SESSION['myFavColor']);