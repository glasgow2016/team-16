package team16;


import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class MainController {
	
	@Autowired
	private PersonRepository personRepository;

    @RequestMapping(value="/", method = RequestMethod.GET)
    public String homepage(){
        return "index";
    }
    
    @RequestMapping(value = "/addPerson", method = RequestMethod.POST, consumes = "application/json")
    @ResponseBody
    public  String addPerson(@RequestBody Person person) {
    	personRepository.save(person);
    	return ("OK");
	}
    
    @RequestMapping(value = "/persons", method = RequestMethod.GET)
    @ResponseBody
    public  String getPerson(@RequestBody Person person) {
    	List<Person> people = personRepository.findAll();
    	return(people.size() +"");
	}
    
}