
public class DelivererLogin implements LogIn {

	
	private String delivererName="John";
	private int delivererPass=87654321;
	private int delivererRePass=87654321;
	@Override
	public void enterName() {
		System.out.println("Enter your name as a deliverer: " + delivererName);
		
	}

	@Override
	public void enterPass() {
		System.out.println("Enter your password as a deliverer: "+ delivererPass);
		
	}

	@Override
	public void reEnterPass() {
		System.out.println("Re-enter your password as a deliverer: " + delivererRePass);
		
	}

}
