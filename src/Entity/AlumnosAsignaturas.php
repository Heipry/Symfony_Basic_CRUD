<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnosAsignaturas
 *
 * @ORM\Table(name="alumnos_asignaturas", indexes={@ORM\Index(name="IDX_D57EE88C5C70C5B", columns={"asignaturas_id"}), @ORM\Index(name="IDX_D57EE88FC28E5EE", columns={"alumnos_id"})})
 * @ORM\Entity
 */
class AlumnosAsignaturas
{
    /**
     * @var int
     *
     * @ORM\Column(name="asignaturas_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $asignaturasId;

    /**
     * @var int
     *
     * @ORM\Column(name="alumnos_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $alumnosId;

    public function getAsignaturasId(): ?int
    {
        return $this->asignaturasId;
    }

    public function getAlumnosId(): ?int
    {
        return $this->alumnosId;
    }


}
