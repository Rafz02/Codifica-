select 
  hospedes.nome_completo,
  hospedagens.titulo,
  status_reservas.status_nome
from 
  reservas
inner join hospedes 
  on reservas.id_hospede = hospedes.id_hospede
inner join hospedagens 
  on reservas.id_hospedagem = hospedagens.id_hospedagem
inner join status_reservas 
  on reservas.status_id = status_reservas.id_status;