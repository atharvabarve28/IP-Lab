import org.json.simple.JSONObject;
import org.json.simple.JSONOArray;
import java.util.HashMap;
import java.util.Map;
import org.json.simple.JSONValue;

class JSON_Example7{
    public static void main(String[] args){
        JSONObject obj = new JSONObject();

        obj.put("name", "foo");
        obj.put("num", new Integer(100));
        obj.put("balance", new Double(1000.21));
        obj.put("is_vip", new Boolean(true));

        System.out.println(obj);
        
    }
}