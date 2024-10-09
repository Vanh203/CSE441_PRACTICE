package com.example.bmi;

import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import java.text.DecimalFormat;

public class MainActivity extends AppCompatActivity {
    Button btnChuanDoan;
    EditText edtTen, edtCanNang, edtChieuCao, edtBMI, edtChuanDoan;
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

        btnChuanDoan = findViewById(R.id.btn_BMI);
        edtTen = findViewById(R.id.edt_name);
        edtCanNang = findViewById(R.id.edt_can_nang);
        edtChieuCao = findViewById(R.id.edt_chieu_cao);
        edtBMI = findViewById(R.id.edt_BMI);
        edtChuanDoan = findViewById(R.id.edt_chuan_doan);
        btnChuanDoan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                double H = Double.parseDouble(edtChieuCao.getText()+"");
                double W = Double.parseDouble(edtCanNang.getText()+"");
                double BMI = W / (H * H);
                Log.d("BMI", BMI + "");
                String chuandoan = "";

                if (BMI < 18) {
                    chuandoan = "Bạn gầy";
                } else if (BMI < 24.9) {
                    chuandoan = "Bạn bình thường";
                } else if (BMI <= 29.9) {
                    chuandoan = "Bạn béo phì độ 1";
                } else if (BMI <= 34.9) {
                    chuandoan = "Bạn béo phì độ 2";
                } else {
                    chuandoan = "Bạn béo phì độ 3";
                }

                DecimalFormat dcf = new DecimalFormat("#.00");
                edtBMI.setText(dcf.format(BMI));
                edtChuanDoan.setText(chuandoan);
            }
        });
    }
}