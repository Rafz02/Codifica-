select
hospedagens.cidade,
round(avg(reservas.valor_noite), 2) as media_por_dia
from reservas
join hospedagens on reservas.id_hospedagem = hospedagens.id_hospedagem
group by hospedagens.cidade;