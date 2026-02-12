select nome_completo, data_nascimento
from hospedes
where data_nascimento > '1990-01-01'
order by data_nascimento;