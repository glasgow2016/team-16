package team16;
import java.util.List;

import org.springframework.stereotype.Component;

@Component	
public class PersonRepositoryImpl implements PersonRepository  {
	public List<Person> findByLastName(String name) {
		return null;
	}
	
	public List<Person> findAll() {
		return null;
	}
	
	public void save(Person person) {
		
	}
}	