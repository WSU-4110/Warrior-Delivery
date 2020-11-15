package com.warrior.hibernate.demo;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.cfg.Configuration;

import com.warrior.hibernate.demo.entity.Student;

public class CreateStudentDemo {

	public static void main(String[] args) {
		//create session factory
		SessionFactory factory =new Configuration ()
				.configure ("hibernate.cfg.xml")
				.addAnnotatedClass(Student.class)
				.buildSessionFactory();
		
		//create session
		Session session = factory.getCurrentSession();
		
		
		try {
						
			//create a student object
			System.out.println("Creating new student object...");
			Student tempStudent = new Student ("Paul", "Wall", "paul@luv2code.com");
			Student tempStudent2 = new Student ("Sanaz", "Rabinia", "gw4590@wayne.edu");
			Student tempStudent3 = new Student ("John", "Reynolds", "aa1234@wayne.edu");
			//start a transaction
			session.beginTransaction();
			
			
			//save the student object
			System.out.println("Saving the student...");
			session.save(tempStudent);
			session.save(tempStudent2);
			session.save(tempStudent3);
			
			//commit transaction
			session.getTransaction().commit();
			
			System.out.println("Done!");
		}
		
		finally {
			factory.close();
		}
		
	}

}
