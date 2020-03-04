<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlasseRepository")
 */
class Klasse
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id;
    private $name;
    private $text;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        $this->name = "unknown";
        if ($_SERVER["REQUEST_METHOD"] = 'POST') {
            if (isset($_POST["name"])) {
                $this->name = $_POST["name"];
            }
        }
        $_SESSION["name"] = $this->name;
        return $_SESSION["name"];
    }

    public function getText(): ?string
    {
        $this->text = "lorem ipsum";
        return $this->text;
    }
}
