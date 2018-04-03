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
@WebServlet("/LogoutController")
public class LogoutController extends HttpServlet {  
        protected void doGet(HttpServletRequest request, HttpServletResponse response)  
                                throws ServletException, IOException {  
            response.setContentType("text/html");  
            PrintWriter out=response.getWriter();  
              
            //request.getRequestDispatcher("http://127.0.0.1:8080/JavaBridge/cs4640/homepage.jsp").include(request, response);  
              
            HttpSession session=request.getSession(false);  
            session.invalidate();  
            
            out.print("You are successfully logged out!");  
              
            out.close();  
            //response.sendRedirect("../../../JavaBridge/cs4640/index.php"); 
            
    }  
}  