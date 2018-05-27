<?php

/** @Entity */
class Student{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @OneToMany(targetEntity="Works")
     * @JoinColumn(name="id", referencedColumnName="student_id")

    */
    private $id;
    /** @Column(length=32) */
    private $name;
    /** @Column(length=32) */
    private $surname;
    /** @Column(length=255) */
    private $adress;
    /** @Column(length=16,nullable=true) */
    private $phone;
    /** @Column(length=32,nullable=true) */
    private $email;

}
