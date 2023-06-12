using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ValidadorCPF
{
    public class Cpf
    {
        public string Numero { get; set; }

        public static bool Validar(string cpf)
        {
            bool cpfValido = true;

            if (cpf.Length != 11)
                cpfValido = false;
            else
            {
                for (int i = 0; i < cpf.Length; i++)
                {
                    if (!char.IsDigit(cpf[i]))
                    {
                        cpfValido = false;
                        break;
                    }
                }
            }
            if (cpfValido)
            {
                for (byte i = 0; i < 10; i++)
                {
                    var temp = new string(Convert.ToChar(i), 11);

                    if (cpf == temp)
                    {
                        cpfValido = false;
                        break;
                    }
                }
            }

            if (cpfValido)
            {
                var j = 1;
                var d1 = 0;
                var d2 = 0;

                for (int i = 10; i > 1; i--)
                {
                    d1 += Convert.ToInt32(cpf.Substring(j, 1)) * i;
                    j++;
                }

                d1 = (d1 * 10) % 11;
                if (d1 == 10)
                    d1 = 0;

                if (d1 != Convert.ToInt32(cpf.Substring(j, 1)))
                    cpfValido = false;

                if (cpfValido)
                {
                    j = 0;
                    for (int i = 11; i > 1; i--)
                    {
                        d2 += Convert.ToInt32(cpf.Substring(j, 1)) * i;
                        j++;
                    }

                    d2 = (d2 * 10) % 11;
                    if (d2 == 10)
                        d2 = 0;

                    if (d2 != Convert.ToInt32(cpf.Substring(10, 1)))
                        cpfValido = false;
                }

                 MessageBox.Show(d1.ToString() + d2.ToString());
            }

            return cpfValido;
        }
    }
}
