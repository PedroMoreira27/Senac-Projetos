using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace Estoque_Banco_de_dados
{
    public partial class Form1 : Form
    {
        SqlConnection con;

        public Form1()
        {
            InitializeComponent();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {
            string str = "";
            str = "Data source=10.64.45.32,1433;Initial Catalog=ti41;User Id=aluno;Password=123456";
            con = new SqlConnection(str);
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (con.State == ConnectionState.Open)
            {
                SqlCommand cm;
                string sql = "";
                sql = "insert into Produtos (Nome_Prod,estoque,vlr_unit) values (@NOME,@EST,@VLR_U)";
                cm = new SqlCommand(sql, con);

                cm.Parameters.Add("@NOME", SqlDbType.VarChar).Value = txtProd.Text;
                cm.Parameters.Add("@EST", SqlDbType.BigInt).Value = txtEst.Text;
                cm.Parameters.Add("@VLR_U", SqlDbType.Decimal).Value = txtVlr.Text;

                int ret = cm.ExecuteNonQuery();
                if (ret > 0)
                {
                    MessageBox.Show("O Prudoto foi cadastrado com sucesso!");
                }
            }
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }



        private void button3_Click(object sender, EventArgs e)
        {
            SqlCommand cm;
            SqlDataAdapter da = new SqlDataAdapter();
            DataTable tb = new DataTable();
            string sql = "select * from Produtos";
            cm = new SqlCommand(sql, con);
            da.SelectCommand = cm;
            da.Fill(tb);
            dtgClientes.DataSource = null;
            dtgClientes.DataSource = tb;
        }

        private void dtgClientes_Click(object sender, EventArgs e)
        {
            if (dtgClientes.Rows.Count > 0)
            {
                txtProd.Text = dtgClientes.CurrentRow.Cells[1].Value.ToString();
                txtEst.Text = dtgClientes.CurrentRow.Cells[2].Value.ToString();
                txtVlr.Text = dtgClientes.CurrentRow.Cells[3].Value.ToString();
            }
        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            if (con.State == ConnectionState.Closed)
            {
                con.Open();
            }
            else
            {
                con.Close();
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            if (con.State == ConnectionState.Open)
            {
                MessageBox.Show("A conexão com o banco esta aberta");

            }
            else if (con.State == ConnectionState.Closed)
            {
                MessageBox.Show("A conexão com o banco esta fechada");
            }
            else
            {
                MessageBox.Show("A conexão pode estar corrompida");
            }
        }

        private void button5_Click(object sender, EventArgs e)
        {
            SqlCommand cm;
            string sql = ("update Produtos set Nome_Prod = @TABLE1, estoque = @TABLE2, vlr_unit = @TABLE3 where ID = @ID");
            cm = new SqlCommand(sql, con);

            cm.Parameters.Add("@ID", SqlDbType.Decimal).Value = dtgClientes.CurrentRow.Cells[0].Value.ToString();
            cm.Parameters.Add("@TABLE1", SqlDbType.VarChar).Value = txtProd.Text;
            cm.Parameters.Add("@TABLE2", SqlDbType.BigInt).Value = txtEst.Text;
            cm.Parameters.Add("@TABLE3", SqlDbType.Decimal).Value = txtVlr.Text;



            int ret = cm.ExecuteNonQuery();
            if (ret > 0)
            { 
                MessageBox.Show("O Produto foi alterado com sucesso!");
            }
        }


        private void dtgClientes_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }


    }
}
