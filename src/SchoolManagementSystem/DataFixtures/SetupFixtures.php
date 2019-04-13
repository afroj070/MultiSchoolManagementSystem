<?php
namespace SchoolManagementSystem\DataFixtures;

use SchoolManagementSystem\Entity\Roles;
use SchoolManagementSystem\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SetupFixtures extends Fixture
{
    protected $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $entityManager)
    {
        $now = new \DateTime();

        // roles data
        $roles = [
            [
                'name'=>'Super Admin',
                'code'=>'ROLE_SUPER_ADMIN'
            ],
            [
                'name'=>'Admin',
                'code'=>'ROLE_ADMIN'
            ],
            [
                'name'=>'Teacher',
                'code'=>'ROLE_TEACHER'
            ],
            [
                'name'=>'Student',
                'code'=>'ROLE_STUDENT'
            ],
            [
                'name'=>'Staff',
                'code'=>'ROLE_STAFF'
            ]
        ];

        foreach($roles as $value) {
            $role = new Roles();
            $role->setName($value['name']);
            $role->setCode($value['code']);
            $role->setActive(1);
            $role->setCreatedAt($now);
            $role->setUpdatedAt($now);

            $entityManager->persist($role);
        }
        $entityManager->flush();
        // users data

        $users = [
            [
                'email'=>"admin@gmail.com",
                'password'=>"password"
            ]
        ];

        $userRole = $entityManager->getRepository(Roles::class)->findOneById(1);

        foreach($users as $value) {
            $user = new Users();
            $pass = $this->passwordEncoder->encodePassword($user, $value['password']);
            $role->setRole($userRole);
            $role->setEmail($value['email']);
            $role->setPassword($pass);
            $role->setActive(1);
            $role->setCreatedAt($now);
            $role->setUpdatedAt($now);

            $entityManager->persist($role);
        }
        $entityManager->flush();
    }

// Admin	ROLE_ADMIN
// Teacher	ROLE_TEACHER
// Student	ROLE_STUDENT
// 	ROLE_STAFF
	

}