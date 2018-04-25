<?php

// arrayAcces é uma interface q possibilita trabalhar o objeto como se fosse um array
// possibilita ver se está setado (isset)
// possibilita dar echo

// Outra interface: Countable

class Users implements arrayAccess, Countable, Iterator
{

}