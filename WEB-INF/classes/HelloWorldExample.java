/*
* Licensed to the Apache Software Foundation (ASF) under one or more
* contributor license agreements.  See the NOTICE file distributed with
* this work for additional information regarding copyright ownership.
* The ASF licenses this file to You under the Apache License, Version 2.0
* (the "License"); you may not use this file except in compliance with
* the License.  You may obtain a copy of the License at
*
*     http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
import java.io.IOException;
import java.io.PrintWriter;
import java.util.ResourceBundle;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;
import javax.servlet.annotation.WebServlet;
/**
 * The simplest possible servlet.
 *
 * @author James Duncan Davidson
 */

public class HelloWorldExample extends HttpServlet {

    private static final long serialVersionUID = 102831973239L;
 
    protected void doPost(HttpServletRequest request,
            HttpServletResponse response) throws ServletException, IOException {

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        String username = request.getParameter("username");
        //String firstname = request.getParameter("firstname");
        //String lastname = request.getParameter("lastname");

        
        //out.print("Welcome, " + un);
        HttpSession session = request.getSession(true); // reuse existing
                                                        // session if exist
                                                        // or create one
        session.setAttribute("user", username);
        //session.setAttribute("firstname", firstname);
        //session.setAttribute("lastname", lastname);
        
        // Get session creation time.
        //Date createTime = new Date(session.getCreationTime());
         
        // Get last access time of this web page.
        //Date lastAccessTime = new Date(session.getLastAccessedTime());

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

        response.sendRedirect("http://127.0.0.1:8080/JavaBridge/cs4640/homepage.jsp");

    }
}



