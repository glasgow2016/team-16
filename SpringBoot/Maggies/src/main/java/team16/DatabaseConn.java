package team16;
import java.sql.DriverManager;
import java.sql.Connection;
import java.sql.SQLException;

public class DatabaseConn {
    
	Connection connection;
	
	public DatabaseConn ()
	{
		try {
			Class.forName("com.mysql.jdbc.Driver");
		} catch (ClassNotFoundException exception) {
			System.out.println("No MySQL JDBC Driver defined.");
			exception.printStackTrace();
			return;
		}
		
		connection = null;
		initialiseConn();
	}
	
	private void initialiseConn()
	{
		System.out.println("MySQL JDBC Driver Registered!");
		
		try {
			connection = DriverManager
			.getConnection("jdbc:mysql://:3306","root", ""); // To Add: Connection Details
	
		} catch (SQLException e) {
			System.out.println("Connection Failed!");
			e.printStackTrace();
			return;
		}
	
		if (connection != null) {
			System.out.println("Connection successful.");
		} else {
			System.out.println("Failed to make connection.");
		}
	}
	
	public Connection getDBConn()
	{
		return connection;
	}
}

