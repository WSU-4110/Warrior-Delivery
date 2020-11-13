
public class FcatoryPatternDemo {

	public static void main(String[] args) {
		LoginFactory loginFactory = new LoginFactory();

		 LogIn studentLogin = loginFactory.getLoginStudent("");
		 studentLogin.enterName();

	      LogIn delivererLogin = loginFactory.getLoginDeliverer("");
	      delivererLogin.enterName();


	}

}
