import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/loginSession")
public class loginSession extends HttpServlet {

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		request.getRequestDispatcher("link.html").include(request, response);
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		String email = request.getParameter("email");
		String username = request.getParameter("username");
		String pwd = request.getParameter("password");
		
		if(pwd.equals( )) {
			HttpSession session = request.getSession();
			session.setAttribute("username", username);
		}
		else {
			out.print("Sorry, your username or password is incorrect.");
			request.getRequestDispatcher("link.html").include(request, response);
		}
		out.close();
	}

}
