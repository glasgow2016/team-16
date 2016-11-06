package team16;
import java.util.List;


public interface PersonRepository {
	List<Person> findByLastName(String name);
	
	List<Person> findAll();
	
	void save(Person person);
}