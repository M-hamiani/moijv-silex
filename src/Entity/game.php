<?php

namespace Entity;
/**
 * Description of game
 *
 * @author Etudiant
 */
class game {
    /**
     * 
     * @var integer
     */
    private $id;
    
    /**
     * 
     * @var string
     */
    private $title;
    
    /**
     * 
     * @var string
     */
    private $image;
    
    /**
     * 
     * @var \Entity\User
     */
    private $user;
    /**
     *
     * @var \Entity\Category
     */
    private $category;
    
}
