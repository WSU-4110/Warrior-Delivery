
public class LoginFactory {
	public LogIn getLoginStudent(String studentName) {

		if (studentName ==null) {

		}
		return new StudentLogin();
	}
	public LogIn getPassStudent(int studentPass) {
		//length of an integer
		if (Integer.toString(studentPass).length()!=8) {
		}
		return new StudentLogin();
	}
	public LogIn getRePassStudent(int studentPass, int studentRePass) {
		if (studentPass!= studentRePass) {
		}
		return new StudentLogin();
	}
	
	public LogIn getLoginDeliverer(String delivererName) {

		if (delivererName ==null) {

		}
		return new DelivererLogin();
	}
	public LogIn getPassDeliverer(int delivererPass) {
		if (Integer.toString(delivererPass).length()!=8) {
		}
		return new DelivererLogin();
	}
	public LogIn getRePassDeliverer(int delivererPass, int delivererRePass) {
		if (delivererPass!= delivererRePass) {
		}
		return new DelivererLogin();
	}

}
