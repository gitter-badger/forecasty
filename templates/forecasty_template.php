<?php
/*
 * Forecasty - A weather plugin for e107
 *
 * Copyright (C) 2015 Patrick Weaver (http://trickmod.com/)
 * For additional information refer to the README.md file.
 *
 */
$FORECASTY_TEMPLATE['menu'] = '
Right Now:<br />
{CONDITION}
<br />
{TEMPERATURE} - Feels like {FEELSLIKE}
<br />
<br/>
Tomorrow:<br/>
{CONDITION: type=nextday}
<br />
{TEMPERATURE: type=nextday}
<br />
{ONELINER}
';
?>
