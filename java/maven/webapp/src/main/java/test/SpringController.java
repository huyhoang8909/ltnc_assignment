package test;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
 
@Controller
public class SpringController {
 
      @RequestMapping("/hello")
        public String test(@RequestParam(value="name", required=false, defaultValue="XYZ") String name, Model model) {
            System.out.println("Request Received");
            model.addAttribute("name", name);
            return "hello";
        }
}