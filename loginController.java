package com.candidjava.servlet;
 
import java.io.IOException;
import java.io.PrintWriter;
 
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
 
/**
 * Servlet implementation class Session
 */
public class LoginController extends HttpServlet {
	private static final long serialVersionUID = 1L;
 
	protected void doPost(HttpServletRequest request,
			HttpServletResponse response) throws ServletException, IOException {

		response.setContentType("text/html");
		PrintWriter out = response.getWriter();

		String username = request.getParameter("username");
		String firstname = request.getParameter("firstname");
		String lastname = request.getParameter("lastname");

		
		//out.print("Welcome, " + un);
		HttpSession session = request.getSession(true); // reuse existing
														// session if exist
														// or create one
		session.setAttribute("user", username);
		session.setAttribute("firstname", firstname);
		session.setAttribute("lastname", lastname);
		session.setMaxInactiveInterval(30); // 30 seconds
		response.sendRedirect("home.jsp");

		else {
			RequestDispatcher rd = request.getRequestDispatcher("login.html");
			out.println("<font color=red>Either user name or password is wrong.</font>");
			rd.include(request, response);
		} // TODO Auto-generated method stub
	}
}