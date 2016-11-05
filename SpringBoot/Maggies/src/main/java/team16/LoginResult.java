package team16;
public class LoginResult {

    private final long id;
    private final String content;

    public LoginResult(long id, String content) {
        this.id = id;
        this.content = content;
    }

    public long getId() {
        return id;
    }

    public String getContent() {
        return content;
    }
}