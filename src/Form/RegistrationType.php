<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Le champ nom ne doit pas être vide.',
                ]),
                new Length([
                    'min' => 2,
                    'max' => 50,
                    'minMessage' => 'Le champ nom doit contenir au moins {{ limit }} caractéres.',
                    'maxMessage' => 'Le champ nom doit contenir au maximum {{ limit }} caractéres.',
                ]),
            ]
        ])
        ->add('prenom', TextType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Le champ prenom ne doit pas être vide.',
                ]),
                new Length([
                    'min' => 2,
                    'max' => 50,
                    'minMessage' => 'Le champ prenom doit contenir au moins {{ limit }} caractéres.',
                    'maxMessage' => 'Le champ prenom doit contenir au maximum {{ limit }} caractéres.',
                ]),
            ]
        ])
        ->add('adresse', EmailType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Le champ adresse email ne doit pas être vide.',
                ]),
                new Email([
                    'message' => 'L\'adresse email "{{ value }}" n\'est pas valide.',
                ]),
            ]
        ])
        ->add('mdp', PasswordType::class, [
            'constraints' => [
                new NotBlank([
                    'message' => 'Veuillez renseigner votre mot de passe.',
                ]),
                new NotBlank([
                    'message' => 'Le champ mot de passe ne doit pas être vide.',
                ]),
                new Length([
                    'min' => 6,
                    'max' => 50,
                    'minMessage' => 'Le champ mot de passe doit contenir au moins {{ limit }} caractéres.',
                    'maxMessage' => 'Le champ mot de passe doit contenir au maximum {{ limit }} caractéres.',
                ]),
                new Regex([
                    'pattern' => '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w\d\s:])([^\s]){6,16}$/',
                    'message' => 'Le champ mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractére spécial (par exemple : #, !, %, &).',
                ]),
            ]
        ])
    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}