import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.layout.GridPane;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.stage.Stage;

import java.awt.*;

public class LoginScreen extends Application {

    Stage window;
    Scene scene, scene2;

    public static void main(String[] args){
        launch(args);
    }

    @Override
    public void start(Stage primaryStage) throws Exception {
        window = primaryStage;
        window.setTitle("Resistor Calculator");

        GridPane grid = new GridPane();
        grid.setPadding(new Insets(10, 10, 10, 10));
        grid.setVgap(8);
        grid.setHgap(10);

        Label nameLabel = new Label("Username:");
        GridPane.setConstraints(nameLabel, 0, 0);

        TextField nameInput = new TextField("User");
        GridPane.setConstraints(nameInput, 1, 0);

        Label passLabel = new Label("Password:");
        GridPane.setConstraints(passLabel, 0, 1);

        TextField passInput = new TextField();
        passInput.setPromptText("Pass");
        GridPane.setConstraints(passInput, 1, 1);

        Button loginButton = new Button("Log in");
        GridPane.setConstraints(loginButton, 1, 2);
        loginButton.setOnAction(new EventHandler<ActionEvent>() {
            @Override
            public void handle(ActionEvent event) {
                String name = nameInput.getText();
                String pass = passInput.getText();
                //Check if values match the database here

                //Change scene here if values match database
            }
        });

        Button createAccount = new Button("Create Acccount");
        GridPane.setConstraints(createAccount, 1, 3);
        createAccount.setOnAction(e -> window.setScene(scene2));

        grid.getChildren().addAll(nameLabel, nameInput, passLabel, passInput, loginButton, createAccount);

        scene = new Scene(grid, 300, 200);

        window.setScene(scene);
        window.show();
    }
}
