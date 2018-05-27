<?php

/** @Entity */
class Works
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     * @OneToMany(targetEntity="Student")
     * @JoinColumn(name="student_id", referencedColumnName="id")
    */
    private $id;
    /**
     *@Column(type="integer")
    */
    private $student_id;
    /**
    * @Column(length=128)
    */
    private $title;
    /** @Column(length=32) */
    private $supervisor;

}
