package vn.edu.tlu.intent_fliter_call_website;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {
    Button btnSearch;
    EditText txtSearch;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        btnSearch = findViewById(R.id.btn_search);
        txtSearch = findViewById(R.id.edit_text_search);
        btnSearch.setOnClickListener(v -> {
            String search = txtSearch.getText().toString();
            if (!search.isEmpty()) {
                Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse(String.format("https:%s", search)));

                startActivity(intent);
            }else {
                Toast.makeText(this, "Please enter a search query", Toast.LENGTH_SHORT).show();
                return;
            }
        });
    }
}