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

namespace Banco_de_dados
{
    public partial class Form1 : Form
    {
        SqlConnection con;
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            string str = "";
            str = "Data source=10.64.45.32,1433;Initial Catalog=ti41;User Id=aluno;Password=123456";
            con = new SqlConnection(str);
        }

        private void Testar_Click(object sender, EventArgs e)
        {
            if (con.State == ConnectionState.Open)
            {
                MessageBox.Show("A conexão com o banco esta aberta");

            }else if (con.State == ConnectionState.Closed)
            {
                MessageBox.Show("A conexão com o banco esta fechada");
            }else
            {
                MessageBox.Show("A conexão pode estar corrompida");
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (con.State == ConnectionState.Closed)
            {
                con.Open();
            }else
            {
                con.Close();   
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (con.State == ConnectionState.Open)
            {
                SqlCommand cm;
                string sql = "";
                sql = "insert into pedrogm_clientes (nome,telefone) values (@NOME,@FONE)";
                cm = new SqlCommand(sql, con);

                cm.Parameters.Add("@NOME", SqlDbType.VarChar).Value = txtNome.Text;
                cm.Parameters.Add("@FONE", SqlDbType.VarChar).Value = txtTel.Text;

                int ret = cm.ExecuteNonQuery();
                if (ret > 0)
                {
                    MessageBox.Show("O cliente foi inserido com sucesso!");
                }
            }
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            SqlCommand cm;
            SqlDataAdapter da = new SqlDataAdapter();
            DataTable tb = new DataTable();
            string sql = "select * from pedrogm_clientes";
            cm = new SqlCommand(sql, con);
            da.SelectCommand = cm;
            da.Fill(tb);
            dtgClientes.DataSource = null;
            dtgClientes.DataSource = tb;
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void dtgClientes_Click(object sender, EventArgs e)
        {
            if (dtgClientes.Rows.Count > 0)
            {
                txtNome.Text = dtgClientes.CurrentRow.Cells[1].Value.ToString();
                txtTel.Text = dtgClientes.CurrentRow.Cells[2].Value.ToString();
            }
        }
    }
}
