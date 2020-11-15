package com.warrior.spring;

import javax.servlet.http.HttpServletRequest;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
@RequestMapping("/login")
public class LogInController {
	
	
	@RequestMapping("/showForm")
	public String showForm() {
		return "login-form";
		
	}
	
	@RequestMapping("/processForm")
	
	public String processForm() {
		return "login";
	}
		
	@RequestMapping("/Name")
	public String processName(@RequestParam ("studentName") String theName, Model model) {
				
		theName = theName.toUpperCase();
		
		String result1 = "Welcome to Warrior Delivery Food service! " + theName;
		
		model.addAttribute("message1", result1);
		
		return "login";
	}
	
	@RequestMapping("/Email")
	public String processEmail(@RequestParam ("studentEmail") String theEmail, Model model) {
		
		theEmail = theEmail.toUpperCase();
		
		String result2 = "Welcome to Warrior Delivery Food service! " + theEmail;
		
		model.addAttribute("message2", result2);
		
		return "login2";
	}
	
}
