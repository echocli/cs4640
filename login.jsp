<%
String user=request.getParameter("user");

String url = "middle.jsp?user="+user+", welcome back!";

%>

<jsp:forward page="<%=url%>">
<jsp:param name="user" value="<%user%>" />
</jsp:forward>
