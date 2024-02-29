<?php
// This removes the AIOSEO Author tab on the users profile page.
add_filter( "aioseo_user_profile_tab_disable", "__return_true" );