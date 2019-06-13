<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User {
    /**
     *
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string", length=64)
     */
    private $email;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=64)
     */
    private $hashedPassword;
    
    /**
     * 
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password) {
        
        $this->email = $email;
        $this->setPassword($password);
    }
        /**
         * 
         * @param string $password
         * @returns void
         */
    public function setPassword(string $password) {
        
        $this->hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }
        /**
         * 
         * @param string $password
         * @return bolean
         */
    public function hasPassword(string $password) {
        
       return password_verify($password, $this->hashedPassword);
    }
}


