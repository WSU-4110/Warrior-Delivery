import java.util.Scanner;
public class StudentLogin implements LogIn {

	Scanner input = new Scanner (System.in);
	Scanner s2 =new Scanner (System.in);
	Scanner s3 =new Scanner (System.in);
	
    
	
	private String studentName="Sanaz";
	private int studentPass=12345678 ;
	private int studentRePass=12345678;
	
	
	@Override
	public void enterName() {
		System.out.println("Enter your name as a deliverer: " +studentName);
		
	}

	@Override
	public void enterPass() {
		System.out.println("Enter your password as a deliverer: "+studentPass);
		
	}

	@Override
	public void reEnterPass() {
		System.out.println("Re-enter your password as a deliverer: "+studentRePass);
		
	}

}
