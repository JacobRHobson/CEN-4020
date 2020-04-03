import javafx.application.Application;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.GridPane;
import javafx.scene.text.Text;
import javafx.scene.control.TextField;
import javafx.scene.control.PasswordField;
import javafx.stage.Stage;
import javafx.scene.control.Label;

public class Registration extends Application {
    @Override
    public void start(Stage stage) {
        //creating label email
        Label usernameLabel = new Label("Username:");

        //creating label password
        Label passwordLabel = new Label("Password:");

        Label confpasswordLabel = new Label("Confirm Password:");

        //Creating Text Field for email
        TextField usernameTextField = new TextField();
        usernameTextField.setPromptText("Enter username");

        //Creating Password Field for password
        PasswordField passwordTextField = new PasswordField();
        passwordTextField.setPromptText("Enter password");

        PasswordField confpasswordTextField = new PasswordField();
        confpasswordTextField.setPromptText("Re-enter Password");

        Button button1 = new Button("Create Account");

        //Creating a Grid Pane
        GridPane gridPane = new GridPane();

        //Setting size for the pane
        gridPane.setMinSize(400, 200);

        //Setting the padding
        gridPane.setPadding(new Insets(10, 10, 10, 10));

        //Setting the vertical and horizontal gaps between the columns
        gridPane.setVgap(8);
        gridPane.setHgap(10);

        //Setting the Grid alignment
        gridPane.setAlignment(Pos.CENTER);

        //Arranging all the nodes in the grid
        gridPane.add(usernameLabel, 0, 0);
        gridPane.add(usernameTextField, 1, 0);
        gridPane.add(passwordLabel, 0, 1);
        gridPane.add(passwordTextField, 1, 1);
        gridPane.add(confpasswordLabel, 0, 2);
        gridPane.add(confpasswordTextField, 1, 2);
        gridPane.add(button1, 1, 3);

        //Creating a scene object
        Scene scene = new Scene(gridPane);

        //Setting title to the Stage
        stage.setTitle("Resistor Calculator");

        //Adding scene to the stage
        stage.setScene(scene);

        //Displaying the contents of the stage
        stage.show();
    }
    public static void main(String args[]){
        launch(args);
    }
}
