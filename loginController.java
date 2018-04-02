package com.candidjava.servlet;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import java.sql.*;

/**
 * Servlet implementation class Session
 */
public class LoginController extends HttpServlet {
    private static final long serialVersionUID = 1L;
    
    protected void doPost(HttpServletRequest request,
                          HttpServletResponse response) throws ServletException, IOException {
        
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        String email = request.getParameter("email");
        String pwd = request.getParameter("password");
        
        String url = "localhost/cs4640/homepage.php";
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/javademo", "root", "");
            PreparedStatement pst = conn.prepareStatement("Select email,password from users where email=? and password=?");
            pst.setString(1, email);
            pst.setString(2, pwd);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                response.sendRedirect(url);
            }
            else {
                out.println("Incorrect login credentials");
            }
        }
        catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }
        

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
        
        // Get session creation time.
        Date createTime = new Date(session.getCreationTime());
        
        // Get last access time of this web page.
        Date lastAccessTime = new Date(session.getLastAccessedTime());
        
        String title = "Welcome Back to my website";
        Integer visitCount = new Integer(0);
        String visitCountKey = new String("visitCount");
        String userIDKey = new String("userID");
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
        
        response.sendRedirect("home.jsp");
        
    }
}
