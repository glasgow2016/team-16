package team16;
import java.util.concurrent.atomic.AtomicLong;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

/*@RestController
public class LoginController {

    private static final String template = "Hello, %s!";
    private final AtomicLong counter = new AtomicLong();

    @RequestMapping(method = RequestMethod.GET, name="/login")
    public LoginResult greeting(@RequestParam(value="username", defaultValue="USER" ) String username ,
    		                    @RequestParam(value="password", defaultValue="PASS" ) String password) {
        
    	if("gooduser".equalsIgnoreCase(username)) {
        	return new LoginResult(counter.incrementAndGet(),
                    "LOGIN SUCCESS");

    	} else {
        	return new LoginResult(counter.incrementAndGet(), "FAILED");

    	}
    }

}*/