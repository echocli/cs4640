import java.io.IOException;  
import java.io.PrintWriter;  
  
import javax.servlet.ServletException;  
import javax.servlet.http.HttpServlet;  
import javax.servlet.http.HttpServletRequest;  
import javax.servlet.http.HttpServletResponse;  
import javax.servlet.http.HttpSession;  
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;
import javax.servlet.annotation.WebServlet;
/**
 * Servlet implementation class Session
 */
@WebServlet("/LoginController")
public class LoginController extends HttpServlet {
	private static final long serialVersionUID = 1L;
 	public LoginController(){

 	}
	public void doPost(HttpServletRequest request,
			HttpServletResponse response) throws ServletException, IOException {

		response.setContentType("text/html");
		PrintWriter out = response.getWriter();

		request.getRequestDispatcher("loginPass.php").include(request, response);

		String username = request.getParameter("username");
		//String firstname = request.getParameter("firstname");
		//String lastname = request.getParameter("lastname");

		
		out.print("Welcome, " + username);
		HttpSession session = request.getSession(true); // reuse existing
														// session if exist
														// or create one
		session.setAttribute("username", username);
		//session.setAttribute("firstname", firstname);
		//session.setAttribute("lastname", lastname);
		
		// Get session creation time.
		//Date createTime = new Date(session.getCreationTime());
		 
		// Get last access time of this web page.
		//Date lastAccessTime = new Date(session.getLastAccessedTime());

		String title = "Welcome Back to my website";
		Integer visitCount = new Integer(0);
		String visitCountKey = new String("visitCount");
		//String userIDKey = new String("userID");
      	//String userID = new String("ABCD");
		// Check if this is new comer on your web page.
		if (session.isNew()) {
		 title = "Welcome to my website";
		} else {
		 visitCount = (Integer)session.getAttribute(visitCountKey);
		 visitCount = visitCount + 1;
		 //userID = (String)session.getAttribute(userIDKey);
		}
		session.setAttribute(visitCountKey,  visitCount);

		response.sendRedirect("homepage.jsp");

	}
}