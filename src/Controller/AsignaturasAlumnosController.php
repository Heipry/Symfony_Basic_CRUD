<?php
namespace App\Controller;
// Si queremos que funcione el template de asignaturas y alumnos deberemos borrar todos los twig de asignaturas
// y el AsignaturasController y losd de Alumnos y el AlumnosController para volver a regenerarlo
// con php bin/console make:crud Asignaturas y php bin/console make:crud Alumnos
use App\Entity\Alumnos;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/asignaturas")
 */
class AsignaturasAlumnosController extends AbstractController
{
    /**
     * @Route("/alumnos/{id}", name="alumnos_asignaturas")
     */
    public function alumnosAsignaturas($id)
    {
        // Load Entity Manager
        $em = $this->getDoctrine()->getManager();
        // Load User_repo
        // La tabla alumnos_asignaturas debe tener los campos asignaturas_id y alumnos_id (en plural)
        $alumnos_repo = $em->getRepository(Alumnos::class);
        $alumno = $alumnos_repo->findOneBy(['id' => $id]);
        if($alumno !== null){
            $table = '';
            $asignaturas = $alumno->getAsignaturas();
        foreach( $asignaturas as $key => $value){
                $table = $table.'<tr><td>'.$value->getId().'</td><td>'.$value->getNombre().'</td></tr>';
        }
        $result = '<table>'.$table.'</table>';
        }else{
            $result = 'sin resultados';
        }
        return new Response($result);
    }
}