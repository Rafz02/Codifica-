select nome_completo, count(id_hospedagem) 
from anfitrioes
left join hospedagens on anfitrioes.id_anfitriao = hospedagens.id_anfitriao
group by nome_completo;