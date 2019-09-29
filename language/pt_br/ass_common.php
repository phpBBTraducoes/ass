<?php
/**
 *
 * phpBB Studio - Advanced Shop System. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.1.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2019, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

/**
 * Some characters you may want to copy&paste: ’ » “ ” …
 */
$lang = array_merge($lang, [
	'ASS_ALL'					=> 'Tudo',
	'ASS_AND'					=> ' e ', // The "and" in the following sentence: 2 days, 6 hours and 5 minutes
	'ASS_AVAILABILITY_END_ON'	=> 'A disponibilidade terminará em %s',

	'ASS_CATEGORY'			=> 'Categoria',
	'ASS_CATEGORY_INACTIVE'	=> 'Esta categoria não está ativa no momento!',
	'ASS_CATEGORY_TITLE'	=> 'Título da categoria',
	'ASS_CATEGORIES_NONE'	=> 'Ainda não há categorias.',

	'ASS_DELETE'			=> 'Excluir',
	'ASS_DELETE_CONFIRM'	=> 'Tem certeza de que deseja excluir este item?',
	'ASS_DELETE_SUCCESS'	=> 'Você excluiu este item com sucesso.',

	'ASS_EXPIRATION_DATE'	=> 'Período de validade',

	'ASS_FEATURED'			=> 'Destaque',
	'ASS_FEATURED_ITEMS'	=> 'Itens em destaque',

	'ASS_GIFT'				=> 'Presentear', // verb: to gift
	'ASS_GIFT_CONFIRM'		=> 'Tem certeza de que deseja presentear este item?',
	'ASS_GIFT_SUCCESS'		=> 'Você presenteou com sucesso este item.',
	'ASS_GIFT_USER'			=> 'Para quem você deseja presentear este item?',
	'ASS_GIFT_TIME'			=> 'Período para presentear',
	'ASS_GIFTABLE'			=> 'Presenteável',
	'ASS_GIFTED_BY'			=> 'Este item foi presenteado a você por %s',
	'ASS_GIFTS_GIVEN'		=> 'Presentes dados',
	'ASS_GIFTS_RECEIVED'	=> 'Presentes recebidos',

	'ASS_HISTORY'			=> 'Histórico',
	'ASS_HISTORY_EMPTY'		=> 'Parece que você ainda não tem um histórico de compras',

	'ASS_INVENTORY_ADDED'		=> 'Este item foi adicionado ao seu inventário',
	'ASS_INVENTORY_ADDED_USER'	=> 'Este item foi adicionado ao inventário de %s', 
	'ASS_INVENTORY_GO'			=> 'Vá para o seu inventário',

	'ASS_ITEM'					=> 'Item',
	'ASS_ITEM_CREATE_TIME'		=> 'Data da criação do item',
	'ASS_ITEM_DESCRIPTION'		=> 'Descrição do item',
	'ASS_ITEM_EDIT_TIME'		=> 'Data da edição do item',
	'ASS_ITEM_EXPIRE_NEVER'		=> 'Este item <span>não</span> tem data de validade', 
	'ASS_ITEM_EXPIRE_SOON'		=> 'Este item expirará em breve!',
	'ASS_ITEM_EXPIRE_WITHIN'	=> 'Este item expirará dentro de <span>%s</span>',
	'ASS_ITEM_EXPIRED'			=> 'Este item expirou.',
	'ASS_ITEM_GIFT'				=> 'Presentear este item',
	'ASS_ITEM_HELP'				=> 'Ajuda do item',
	'ASS_ITEM_ICON'				=> 'Ícone do item',
	'ASS_ITEM_IMAGE'			=> 'Imagem do item',
	'ASS_ITEM_IMAGES'			=> 'Imagens de itens',
	'ASS_ITEM_INFORMATION'		=> 'Informações sobre o item',
	'ASS_ITEM_INACTIVE'			=> 'Este item não está ativo no momento!',
	'ASS_ITEM_ORDER'			=> 'Ordem do item',
	'ASS_ITEM_PRICE'			=> 'Preço do item',
	'ASS_ITEM_PURCHASE'			=> 'Comprar este item',
	'ASS_ITEM_REFUND_NEVER'		=> 'Este item <span>não</span> pode ser reembolsado', 
	'ASS_ITEM_REFUND_WITHIN'	=> 'Este item pode ser reembolsado dentro de <span>%s</span>',
	'ASS_ITEM_STOCK'			=> 'Estoque do item',
	'ASS_ITEM_TITLE'			=> 'Título do item',
	'ASS_ITEM_TYPE'				=> 'Tipo de item',
	'ASS_ITEM_TYPE_NOT_EXIST'	=> 'O tipo de item solicitado não existe',
	'ASS_ITEM_USE_BEFORE'		=> 'Certifique-se de usar este item antes',
	'ASS_ITEM_USE_COUNT'		=> [
		1	=> 'Este item pode ser usado <span>%d</span> vez',
		2	=> 'Este item pode ser usado <span>%d</span> vezes',
	],
	'ASS_ITEM_USE_REACHED'		=> 'Você atingiu o limite de uso para este item.',
	'ASS_ITEM_USE_UNLIMITED'	=> 'Este item pode ser usado <span title="Ilimitado">&infin;</span> vezes', // &infin; is the infinite sign
	'ASS_ITEMS_NONE'			=> 'Ainda não há itens.',
	'ASS_ITEMS_NONE_INVENTORY'	=> 'Parece que você ainda não tem nenhum item',
	'ASS_ITEMS_RECENT'			=> 'Itens recentes',
	'ASS_ITEMS_LIMITED'			=> 'Itens limitados',
	'ASS_ITEMS_COUNT'			=> [
		1	=> '%d item',
		2	=> '%d items',
	],

	'ASS_INVENTORY'			=> 'Inventário',

	'ASS_POINTS_BALANCE'	=> 'Seu novo saldo de %s é', 
	'ASS_POINTS_DEDUCTED'	=> 'Deduzido da sua conta',
	'ASS_POINTS_NEW'		=> '%s novo',
	'ASS_POINTS_OLD'		=> '%s antigo',
	'ASS_PRICE_ABOVE'		=> 'Preço acima',
	'ASS_PRICE_BELOW'		=> 'Preço abaixo',
	'ASS_PURCHASE'			=> 'Comprar', // verb: to purchase
	'ASS_PURCHASE_CONFIRM'	=> 'Tem certeza de que deseja comprar este item?',
	'ASS_PURCHASE_SUCCESS'	=> 'Você comprou este item com sucesso.',
	'ASS_PURCHASE_TIME'		=> 'Data da compra',
	'ASS_PURCHASES'			=> 'Compras', // plural noun

	'ASS_RECIPIENT_NAME'	=> 'Nome do Destinatário',
	'ASS_REFUND'			=> 'Reembolso',
	'ASS_REFUND_CONFIRM'	=> 'Tem certeza de que deseja o reembolso deste item?',
	'ASS_REFUND_DATE'		=> 'Período de reembolso',
	'ASS_REFUND_SUCCESS'	=> 'Você reembolsou este item com sucesso.',
	'ASS_RELATED_ITEMS'		=> 'Itens relacionados',

	'ASS_ON_SALE'			=> 'Em Promoção',
	'ASS_SALE'				=> 'Promoção',
	'ASS_SALE_END_ON'		=> 'A promoção terminará em %s',
	'ASS_SALE_DISCOUNT'		=> 'Desconto da promoção',
	'ASS_SALE_ITEMS'		=> 'Itens em promoção',
	'ASS_SALE_PERCENTAGE'	=> 'Porcentagem de desconto',
	'ASS_SALE_PRICE'		=> 'Preço na promoção',

	'ASS_SHOP'				=> 'Loja',
	'ASS_SHOP_INACTIVE'		=> 'A loja não está ativa no momento!',
	'ASS_SHOP_INDEX'		=> 'Índice da loja',
	'ASS_STOCK'				=> 'Estoque',
	'ASS_STOCK_CURRENT'		=> 'Estoque atual',
	'ASS_STOCK_INITIAL'		=> 'Estoque inicial',
	'ASS_STOCK_OUT'			=> 'Sem estoque',

	'ASS_TIME_CREATED'		=> 'Data da criação',
	'ASS_TIME_EDITED'		=> 'Data da última edição',

	'ASS_TYPE_FILE'					=> 'Baixar arquivo',
	'ASS_TYPE_FILE_CONFIRM'			=> 'Tem certeza de que deseja baixar este arquivo?',
	'ASS_TYPE_FILE_LOG'				=> 'baixou um arquivo',
	'ASS_TYPE_FILE_START'			=> 'Seu arquivo deve começar a baixar dentro de alguns segundos.',
	'ASS_TYPE_FILE_START_NOT'		=> 'Se o download não iniciar automaticamente, você pode clicar no botão de download abaixo.',
	'ASS_TYPE_FILE_SUCCESS'			=> 'Você fez o download deste arquivo com sucesso.',
	'ASS_TYPE_FILE_TITLE'			=> 'Arquivo',
	'ASS_TYPE_FILE_NOT_EXIST'		=> 'O arquivo solicitado não existe.',
	'ASS_TYPE_POINTS'				=> 'Adicionar %s',
	'ASS_TYPE_POINTS_CONFIRM'		=> 'Tem certeza de que deseja adicionar esses %s?',
	'ASS_TYPE_POINTS_LOG'			=> '%s adicionado',
	'ASS_TYPE_POINTS_SUCCESS'		=> 'Você adicionou com sucesso esses %s.',
	'ASS_TYPE_POINTS_TITLE'			=> '%s',
	'ASS_TYPE_POINTS_NOT_EMPTY'		=> 'Valor dos %s não pode estar vazio.',

	'ASS_UNAVAILABLE_CATEGORY'		=> 'Categoria indisponível',
	'ASS_UNAVAILABLE_ITEM'			=> 'Item indisponível',
	'ASS_UNAVAILABLE_TYPE'			=> 'O tipo de item está indisponível',
	'ASS_UNLIMITED'			=> 'Ilimitado',
	'ASS_UNLIMITED_STOCK'	=> 'Estoque ilimitado',
	'ASS_USAGES'			=> 'Usos',
	'ASS_USED_LAST'			=> 'Usado por último',

	'ASS_DAYS'				=> [
		1	=> '%d dia',
		2	=> '%d dias',
	],
	'ASS_HOURS'				=> [
		1	=> '%d hora',
		2	=> '%d horas',
	],
	'ASS_MINUTES'			=> [
		1	=> '%d minuto',
		2	=> '%d minutos',
	],
	'ASS_SECONDS'			=> [
		1	=> '%d segundo',
		2	=> '%d segundos',
	],

	'ASS_LOG_ITEM_GIFTED'			=> 'Deu um presente para %s',
	'ASS_LOG_ITEM_PURCHASED'		=> 'Comprou um item',
	'ASS_LOG_ITEM_RECEIVED'			=> 'Recebeu um presente de %s',
	'ASS_LOG_ITEM_USED'				=> 'Usou um item',

	'ASS_ERROR_TITLE'				=> 'Oh, parece que você encontrou nosso pote secreto de %s',
	'ASS_ERROR_LOGGED'				=> 'Este erro foi registrado. Você pode notificar um administrador para verificar os "logs do administrador".',

	'ASS_ERROR_ALREADY_EXISTS'		=> 'O %s solicitado já existe.', 
	'ASS_ERROR_ALREADY_OWNED'		=> 'Você já possui este item no momento.',
	'ASS_ERROR_ALREADY_OWNED_USER'	=> '%s já possui este item no momento.',
	'ASS_ERROR_NOT_ACTIVE_CATEGORY'	=> 'A categoria solicitada não está ativa no momento.',
	'ASS_ERROR_NOT_ACTIVE_ITEM'		=> 'O item solicitado não está ativo no momento.',
	'ASS_ERROR_NOT_AUTH_GIFT'		=> 'Você não está autorizado a dar itens de presente.', 
	'ASS_ERROR_NOT_AUTH_PURCHASE'	=> 'Você não está autorizado a comprar itens.', 
	'ASS_ERROR_NOT_AUTH_RECEIVE'	=> 'O usuário solicitado não está autorizado a receber presentes.',
	'ASS_ERROR_NOT_AVAILABLE'		=> 'O item solicitado não está mais disponível.',
	'ASS_ERROR_NOT_ENOUGH_POINTS'	=> 'No momento, você não possui %s suficiente para comprar este item.', 
	'ASS_ERROR_NOT_EXISTS'			=> 'O %s solicitado ainda não existe.', 
	'ASS_ERROR_NOT_FOUND_CATEGORY'	=> 'Não foi possível encontrar a categoria solicitada.',
	'ASS_ERROR_NOT_FOUND_ITEM'		=> 'Não foi possível encontrar o item solicitado.',
	'ASS_ERROR_NOT_FOUND'			=> 'Não foi possível encontrar o %s solicitado..', 
	'ASS_ERROR_NOT_GIFTABLE'		=> 'O item solicitado não pode ser presenteado.',
	'ASS_ERROR_NOT_GIFT_SELF'		=> 'Você não tem permissão para se presentear.',
	'ASS_ERROR_NOT_OWNED'			=> 'Atualmente, você não possui este item.',
	'ASS_ERROR_NOT_REFUND'			=> 'Você não está mais autorizado a reembolsar este item. Você já o usou.',
	'ASS_ERROR_NOT_UNIQUE'			=> 'O campo “%1$s” contém um valor não exclusivo. O valor já está sendo usado em “%2$s”.', 
	'ASS_ERROR_OUT_OF_STOCK'		=> 'O item solicitado está atualmente sem estoque.',
	'ASS_ERROR_TOO_HIGH'			=> 'O campo “%1$s” é muito grande. Ele deve ser menor que %2$s e atualmente é %3$s.', 
	'ASS_ERROR_TOO_LONG'			=> 'O campo “%1$s” é muito longo. Ele deve ter menos de %2$s caracteres e atualmente possui %3$s caracteres.', 
	'ASS_ERROR_TOO_LOW'				=> 'O campo “%1$s” é muito pequeno. Ele deve ser maior que %2$s e atualmente é %3$s.', 
	'ASS_ERROR_TOO_SHORT'			=> 'O campo “%1$s” é muito curto. Ele deve ter mais de %2$s caracteres e atualmente possui %3$s caracteres.', 
	'ASS_ERROR_UNSIGNED'			=> 'O campo “%s” está negativo. Deve ter um valor positivo.', 
	'ASS_ERROR_ILLEGAL_CHARS'		=> 'O campo “%s” contém caracteres ilegais.', 
]);
